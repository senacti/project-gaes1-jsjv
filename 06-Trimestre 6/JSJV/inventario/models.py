from django.db import models

class Input(models.Model):
    product_type=models.CharField(max_length=20,verbose_name="Tipo Producto")
    description = models.TextField(verbose_name="Descripcion")
    
     #Metodo To String
    def __str__(self) :
        return self.product_type
    class Meta:
        verbose_name = "Insumo"
        verbose_name_plural = "Insumos"
        db_table = "insumo"
        ordering = ['id']


class Machine(models.Model):
    machine_type=models.CharField(max_length=20,verbose_name="Tipo maquina")
    description = models.TextField(verbose_name="Descripcion")
    
     #Metodo To String
    def __str__(self) :
        #poner el nombre de campo EJ machine_type
        return self.machine_type
    class Meta:
        verbose_name = "Maquina"
        verbose_name_plural = "Maquinas"
        db_table = "maquina"
        ordering = ['id']
#tabla
class Inventory(models.Model):    
    #atributos 
    supplier_name=models.CharField(max_length=50,verbose_name="Nombre proveedor")
    amount = models.FloatField(verbose_name="Cantidad")
    description = models.TextField(verbose_name="Descripcion")

    input = models.ForeignKey(Input,on_delete=models.CASCADE)
    machine = models.ForeignKey(Machine,on_delete=models.CASCADE)


    #Metodo To String
    def __str__(self) :
        return self.supplier_name
    #base de datos
    class Meta:
        verbose_name = "Inventario"
        verbose_name_plural = "Inventarios"
        db_table = "inventario"
        ordering = ['id']
