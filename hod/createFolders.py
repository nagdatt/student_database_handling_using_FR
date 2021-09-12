import xlsxwriter
import calendar
import os 
import sys
from openpyxl import Workbook
import datetime
import pandas as pd
import numpy as np
workbook = Workbook()
sheet = workbook.active
today = datetime.datetime.today()
sub={"firstyear":["ENG","MATHS-1","SCIENCE","ICT","WPC","EGP","PIC","BEC","EEC","MATHS-2","BCC","CPH","WPD"],
     "secondyear":["CPP","DSU","CGR","DBMS","DTE","JPR","SEN","DCC","MIC","VB.NET"],
     "thirdyear":["EST","AJP","STE","CSS","ACN","ADM","ITR","CPP-1","MGT","MAD","ETI","WBP","NIS","DWMT","EDI","CPE-2"]};
# Directory
if(len(sys.argv)>3):
      pass
      #print("False2")
else:
      os.chdir("C:/xampp/htdocs/MeagaFinal/MainDataOfDepartment")
      directory =sys.argv[1] 
    #  if sys.argv[2] in sub["firstyear"]:
     #       directory+="/firstyear"
    #  if sys.argv[2] in sub["secondyear"]:
     #       directory+="/secondyear"
    #  if sys.argv[2] in sub["thirdyear"]:
     #       directory+="/thirdyear"

      parent_dir ="C:/xampp/htdocs/MeagaFinal/MainDataOfDepartment"
      path = os.path.join(parent_dir, directory)
      t=os.path.isdir(path)
      counter=1
     
      if(not t):
            os.mkdir(path)
      else:
           pass
      for i in range(0,6):
	        
            headers=['Name','Enrollment.','Roll no.']
            p1=""
            t1=""
            p2=path
            if ((today.month+i)>12):
                  p1=os.path.join(path, sys.argv[2]+"_"+str(counter)+"_"+str(today.year+1)+".xlsx")
                 # rehead=calendar.monthrange(today.year+1,counter)[1]
                 # for j in range(1,rehead+1):
                  #      headers.append(j+'-'+counter+'-'+(today.year+1))
                  t1=os.path.isfile(p1)
                  counter+=1
            else:
                  p1=os.path.join(path, sys.argv[2]+"_"+str(today.month+i)+"_"+str(today.year)+".xlsx")
                  #rehead=calendar.monthrange(today.year,today.month+i)[1]
                 # for j in range(1,rehead+1):
                 #       headers.append(j+'-'+counter+'-'+(today.year+1))
                  t1=os.path.isfile(p1)
            
            
           
            if(not t1):
                  try:
                      workbook.save(filename=p1)
					 # workbook.close()
                    #  df2 = pd.DataFrame(
                    #  columns=headers)
                     # df2.to_excel(p1)
                      
                      
                  except IOError:
                                  pass
            


