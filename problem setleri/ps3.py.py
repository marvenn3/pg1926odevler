sayilar = []
veri = int(input("kac sayı girmek istersin?: "))
for i in range(veri):
    sayi=int(input("{}. lütfen sayıyı girdin :". format(i+1)))
    sayilar+=[sayi]
print(sayilar)

def yerDegistirme(liste):
    sifir= []
    digersayilar=list()
    for i in liste:
        if i==0:
            sifir.append(i)
        else:
            digersayilar.append(i)
    cikti = sifir + digersayilar
    return (cikti)
x=yerDegistirme(sayilar)
print(x)