teksayı=[]
ciftsayı=[]
veri=[]
sayi = int(input('Listeye kaç sayı eklenecek: '))
for n in range(sayi):
    sayi=int(input("{}. sayıyı girin :". format(n+1)))
    if sayi not  in teksayı or ciftsayı:
        if sayi%2==0:
            ciftsayı.append(sayi)
        else:
            teksayı.append(sayi)
veri=teksayı+ciftsayı
print(veri)
print("EN büyük tek sayı :", max(teksayı))   
