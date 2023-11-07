from django.db import models

class Category(models.Model):
    name=models.CharField(max_length=50,verbose_name="Nombre")
    description=models.TextField(verbose_name="descripcion")
    def __str__(self):
        return self.name
    
    class Meta:
        verbose_name = "Categoria"
        verbose_name_plural = "Categorias"
        db_table = "categoria"
        ordering = ['id']
#tabla
class Product(models.Model):    
    #atributos 
    name=models.CharField(max_length=50,verbose_name="Nombre")
    price = models.FloatField(verbose_name="Precio")
    description = models.TextField(verbose_name="Descripcion")
    category = models.ForeignKey(Category,on_delete=models.CASCADE)

    #Metodo To String
    def __str__(self) :
        return self.name
    #base de datos
    class Meta:
        verbose_name = "Producto"
        verbose_name_plural = "Productos"
        db_table = "producto"
        ordering = ['id']



#python manage.py makemigrations
#python manage.py migrate