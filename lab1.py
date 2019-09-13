#1
nl=[]
for x in range(2000, 3201):
    if ( x % 7 == 0 ) and ( x % 5 == 0 ):
        nl.append(str(x))
print (','.join(nl))

#2
def factorial(n):
    if n == 0:
        return 1
    else:
        return n * factorial( n - 1 )
n=int(input("Input a number to compute the factiorial : "))
print(factorial(n))

#3
n = int(input("Input a number "))
d = dict()

for x in range( 1, n + 1 ):
    d[x] = x * x

print(d)

#4
name = input("What is your name: ")
age = int(input("How old are you: "))
year = str((2014 - age)+100)
print(name + " will be 100 years old in the year " + year)
