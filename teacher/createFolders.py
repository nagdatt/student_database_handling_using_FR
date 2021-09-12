import xlsxwriter
import os 
import sys
from openpyxl import Workbook
import datetime
workbook = Workbook()
today = datetime.datetime.today()
sheet = workbook.active
# Directory
if(len(sys.argv)>3):
      pass
      #print("False2")
else:
      os.chdir("C:/xampp/htdocs/MeagaFinal/MainDataOfDepartment")
      directory =sys.argv[1] 
      parent_dir ="C:/xampp/htdocs/MeagaFinal/MainDataOfDepartment"
      path = os.path.join(parent_dir, directory)
      t=os.path.isdir(path)
      if(not t):
            os.mkdir(path)
      else:
           pass
      for i in range(0,6):
            p1=os.path.join(path, sys.argv[2]+"_"+str(today.month+i)+"_"+str(today.year)+".xlsx")
            t1=os.path.isfile(p1)
           
            if(not t1):
                  try:
                      workbook.save(filename=p1)
                      
                      
                  except IOError:
                                  pass


