import my_module


#print("hello world")
a = 1
b = "afeng"
print(a,b)
c = 2; d = "abc"
print(c,d)
'''
test
'''

letter = ['a','b','c']
print(letter[0])
print(letter)
print(letter[:])


if a > 3:
    print("a>3")
elif a == 3:
    print("a==3")
else:
    print("a<3")


for i in "abcdefg":
    print(i)

while(a<=10):
    print(a)
    a = a + 1

def add(a,b):
    return a + b

add(5,8)
print(add(5,8))


n = my_module.jianfa(9,7)
print(n)
