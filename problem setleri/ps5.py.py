class Okullar():
    def __init__(self,okul_adı,okul_yılı,personel_sayısı,öğrenci_sayısı,öğretmen_sayısı) :
        self.okul_adı = okul_adı
        self.okul_yılı= okul_yılı
        self.personel_sayısı = personel_sayısı
        self.öğrenci_sayısı = öğrenci_sayısı
        self.öğretmen_sayısı = öğretmen_sayısı

okul_1= Okullar ("albayrak","1989","45","1254","39")
okul_2= Okullar ("bahceli","1999","24","478","17")
okul_3= Okullar ("kale","2002","32","857","28")
okul_2.personel_sayısı= okul_3.personel_sayısı
okul_3.okul_adı=okul_1.okul_adı
print(okul_2.personel_sayısı)
print(okul_3.okul_adı)