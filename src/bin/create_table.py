#!/usr/bin/python3
# author: Alexander Schneider
# date: 12.01.12017
# description: This function accepts database configuration and user input from the
#			   form, to create a new table holding a network

from optparse import OptionParser
from configparser import ConfigParser
import textwrap
import pymysql as mysqldb
import pymysql.cursors

# Use the mysqldb compatibitility function of pymysql
mysqldb.install_as_MySQLdb()

# Initializing the command line Parser to recieve arguments from the shell, configure
# an option for the network address and the netmask length
shell_parser = OptionParser()
shell_parser.add_option("-N", "--network-name",
			dest="network_name",
			type="string",
			help="specify the name of the network",
                        default=" ")
shell_parser.add_option("-c", "--comment",
			dest="comment",
			type="string",
			help="specify a comment",
                        default=" ")
shell_parser.add_option("-a", "--network-address",
			dest="network_address",
			type="string",
			help="specify the network address")
shell_parser.add_option("-n", "--netbits",
			dest="netbits",
			type="int",
			help="specify the length of the netmask")

# Initialize an array with the parsed arguemnts and and check if every argument was
# specified on the command line
(options, args) = shell_parser.parse_args()
if not options.network_address:
	shell_parser.error("please specify the first network address tuple")
if not options.netbits:
	shell_parser.error("please specify the length of the netmask")

# Split the address into 4 tuples, then asign the given values to local variables
tuple_all = options.network_address
tuple0 = int(tuple_all.split(sep=".")[0])
tuple1 = int(tuple_all.split(sep=".")[1])
tuple2 = int(tuple_all.split(sep=".")[2])
tuple3 = int(tuple_all.split(sep=".")[3])
netbits = options.netbits
# Initialze two temporary variables for calculation
address = 0
netlen = 0

#Calculate the netmask
for x in range (0, netbits):
	netlen += 2**x

# Shifting the netmask to fit 32 Bit IPv4 addresses
netlen *= 2**(32-netbits)
netlen = bin(netlen)

# Calculate the last addresses address part in the given network 
netbits = 32 - netbits
maximum = -2
for x in (0, netbits):
    maximum += 1 * 2**x

# Calculataing the address from the 4 given tuples
tuple0 *= (2**24)
tuple1 *= (2**16)
tuple2 *= (2**8)
tuple3 *= 1
address = sum([tuple0, tuple1, tuple2, tuple3])

# Initialize the the last address by adding the calculated address part 
last = maximum + address

binad = bin(address).split(sep="b")[1]
templen =  len(binad)
templen = 32 - templen
while templen > 0:
    binad = '0' + binad
    templen -= 1

# Initiate the config parser, to read the server configuration file
config = ConfigParser()
config.read('./server.ini')
# Apply the varibales read from the configuration


# Defining a new connection with the variables from the server.ini
connection = mysqldb.connect( 
    host = config['Default']['DatabaseHost'],
    user = config['Default']['DatabaseUser'],
    password = config['Default']['DatabasePassword'],
    db = config['Default']['Database'],
    charset = 'utf8mb4',    
    cursorclass = mysqldb.cursors.DictCursor
    )
try:
# Add a new network entry in the network meta table    
    with connection.cursor() as cursor:
        sql = "INSERT INTO `networks` (`nwname`, `nwaddress`, `nwsm`, `nwcomment`) VALUES (%s, %s, %s, %s)"
        cursor.execute(sql, (options.network_name, tuple_all, options.netbits, options.comment))
        connection.commit()
# Get the newly assigned network ID
    with connection.cursor() as cursor:
        sql = "SELECT `nwid` FROM networks ORDER BY nwid DESC LIMIT 1"
        cursor.execute(sql)
        nwid = cursor.fetchone()
        nwid2 = nwid.get('nwid')
        adrspace = "adrspace_" + str(nwid.get('nwid'))
# Create a new table to hold the address space information
    with connection.cursor() as cursor:
        sql = "CREATE TABLE `"+adrspace+"` (adid INT, address VARCHAR(32), typ VARCHAR(16), host VARCHAR(48) DEFAULT ' ', comment VARCHAR(64) DEFAULT ' ', nwid INT, PRIMARY KEY (adid))"
        cursor.execute(sql)

# Counter four unique address column id
    adid = 0

# As long as the current address isn't equivalent to the last address do:
# - Transform the address into string binary representation "bin()" and cut of "0b"
#   which normally indicates the base
# - Split the string into 4 parts of 8 characters and convert the result to int then
#   reconvert to string
# - Concatenate the address tuple strings to one address
# - Add a new row with the determined results
    while address != last+1:         
        binad = bin(address).split(sep="b")[1]
        templen =  len(binad)
        templen = 32 - templen

        while templen > 0:
            binad = '0' + binad
            templen -= 1
    
        bin0 = str(int(textwrap.wrap(binad, 8)[0], 2))
        bin1 = str(int(textwrap.wrap(binad, 8)[1], 2))
        bin2 = str(int(textwrap.wrap(binad, 8)[2], 2))
        bin3 = str(int(textwrap.wrap(binad, 8)[3], 2))
        binadp = bin0 + '.' + bin1 + '.' + bin2 + '.' + bin3
    
        with connection.cursor() as cursor:
            sql = "INSERT INTO `"+adrspace+"` (`adid`, `address`, `typ`, `nwid`) VALUES (%s, %s, %s, %s)"
            cursor.execute(sql, (adid, binadp, 'IPv4', nwid2))
        connection.commit()
        address += 1
        adid += 1

finally: connection.close()
#print("Success!")
