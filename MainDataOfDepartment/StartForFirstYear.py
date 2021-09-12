import face_recognition
images = os.listdir('../Final Project VIJO TECH')
FilePath=[]


for i in range(0,len(images)):
            if os.path.isdir(images[i]):
                  FilePath.append( images[i]);
AnImage=[]
global IDs;
IDs=[]
for f in FilePath:
            try:
                  path=os.listdir("../Final Project VIJO TECH/"+f)
                  
                  for p in path:
                        pr="../Final Project VIJO TECH/"+f+"/"+p
                        
                        if os.path.isdir(pr) :
                              pathImg=os.listdir(pr)
                              IDs.append(pr[-10:])
                              for i in pathImg:
                                  
                                    if  (i.endswith('.jpg') or i.endswith('.png') or i.endswith('.jpeg')):
                                          AnImage.append(pr+"/"+i)
                        else:
                              pass
                                                
            except Exception: 
                  print(Exception)
print(IDs)
print(AnImage)

known_image = face_recognition.load_image_file("biden.jpg")
unknown_image = face_recognition.load_image_file("unknown.jpg")

biden_encoding = face_recognition.face_encodings(known_image)[0]
unknown_encoding = face_recognition.face_encodings(unknown_image)[0]

results = face_recognition.compare_faces([biden_encoding], unknown_encoding)
