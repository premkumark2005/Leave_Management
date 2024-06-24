import mysql.connector
con_o=mysql.connector.connect(host="localhost",user="root",password="",database="leave_management")
cur_o=con_o.cursor()

#code for deleting all the rows to get a new table
'''truncate_query = "TRUNCATE TABLE studentman"
cur_o.execute(truncate_query)
con_o.commit()'''
#end

###actual code (querying)
'''
#description of table
q1="desc studentman"
cur_o.execute(q1)
table=cur_o.fetchall()h
print("\n\tTable Description")
for atr in table
    print(atr)
print("\n\t---------------------end----------------\n")
#'''

a=input("Name: ")
b=input("Roll No: ")
c=input("Department: ")
d=input("Reason for leave: ")
e=input("From: ")
f=input("To: ")
g=input("No of Days: ")
#insert code
q2=f"INSERT INTO `leave_info`(`Name`, `Roll No`, `Department`, `Reason`, `From`, `To`, `No of days`) VALUES ('{a}','{b}','{c}','{d}','{e}','{f}',{g})"
cur_o.execute(q2)
con_o.commit()
##ending steps
cur_o.close()
con_o.close()