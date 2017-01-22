import numpy as np
from sklearn.ensemble import RandomForestClassifier

dataset = np.loadtxt("train.csv", delimiter=",")
test_dataset=np.loadtxt("test.csv", delimiter=",")

X = dataset[:,1:5]
Y = dataset[:,5]
test_x=test_dataset[:,1:5]
new_X=np.delete(X, 3, axis=1)
new_test_x=np.delete(test_x, 3, axis=1)
tenure=X[:,3]
test_tenure=test_x[:,3]
freq=X[:,1]
test_freq=test_x[:,1]
Z=tenure/freq
test_Z=test_tenure/test_freq
final_X=np.column_stack((new_X,Z))
final_test_x=np.column_stack((new_test_x,test_Z))

clf = RandomForestClassifier(n_estimators=100)
clf = clf.fit(new_X, Y)
pred_y=clf.predict(new_test_x)
ans=test_dataset[:,0]
ans=np.column_stack((ans,pred_y))
new_ans=ans[ans[:,1].argsort()]
new_ans[:] = new_ans[::-1]
np.savetxt("xaa.csv", new_ans, delimiter=",", fmt="%10.5f")
