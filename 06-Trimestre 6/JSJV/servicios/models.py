from django.db import models

class OrderJob(models.Model):
    totalPrice = models.CharField(verbose_name="Valor Total", max_length=255, blank=True, null=True)
    dateOT = models.DateField(verbose_name="Fecha entrada", blank=True, null=True)
    amountOT = models.CharField(verbose_name="Cantidad", max_length=255)

    def __str__(self):
        return f"Orden de Trabajo {self.id}"

    class Meta:
        verbose_name = "Orden de Trabajo"
        verbose_name_plural = "Ordenes de trabajo"
        db_table = "orden_trabajo"
        ordering = ['id']

class ProductState(models.Model):
    descriptionProduct = models.CharField(verbose_name="Descripcion Producto", max_length=255, blank=True, null=True)
    orderJob = models.ForeignKey(OrderJob, on_delete=models.CASCADE)

    def __str__(self):
        return f"Estado del Producto {self.id}"

    class Meta:
        verbose_name = "Estado del Producto"
        verbose_name_plural = "Estados del Producto"
        db_table = "estado_producto"
        ordering = ['id']

class ProductList(models.Model):
    amountProduct = models.CharField(verbose_name="Cantidad Producto", max_length=255, blank=True, null=True)
    descriptionProduct = models.TextField(verbose_name="Descripcion Producto", blank=True, null=True)
    statusProduct = models.CharField(verbose_name="Estado del producto", max_length=255)
    categoryProduct = models.CharField(verbose_name="Categoria del Producto", max_length=255)
    orderJob = models.ForeignKey(OrderJob, on_delete=models.CASCADE)

    def __str__(self):
        return f"Listado de Producto {self.id}"

    class Meta:
        verbose_name = "Listado de Producto"
        verbose_name_plural = "Listados de Producto"
        db_table = "listado_producto"
        ordering = ['id']

class OutputOJ(models.Model):
    amountOutputs = models.CharField(verbose_name="Cantidad Salidas", max_length=255, blank=True, null=True)
    dateOutput = models.DateField(verbose_name="Fecha salida", blank=True, null=True)
    productList = models.ForeignKey(ProductList, on_delete=models.CASCADE)

    def __str__(self):
        return f"Salida OT {self.id}"

    class Meta:
        verbose_name = "Salida OT"
        verbose_name_plural = "Salidas OT"
        db_table = "salidas_ot"
        ordering = ['id']

class Income(models.Model):
    paymentMethod = models.TextField(verbose_name="Metodo De Pago", blank=True, null=True)
    descriptionIncome = models.TextField(verbose_name="Descripcion Ingresos", blank=True, null=True)
    totalincome = models.CharField(verbose_name="Total ingresos", max_length=255)
    orderJob = models.ForeignKey(OrderJob, on_delete=models.CASCADE)

    def __str__(self):
        return f"Ingreso {self.id}"

    class Meta:
        verbose_name = "Ingreso"
        verbose_name_plural = "Ingresos"
        db_table = "ingresos"
        ordering = ['id']

class TypeService(models.Model):
    descriptionTS = models.CharField(verbose_name="Descripcion", max_length=255, blank=True, null=True)
    orderJob = models.ForeignKey(OrderJob, on_delete=models.CASCADE)

    def __str__(self):
        return f"Tipo de Servicio {self.id}"

    class Meta:
        verbose_name = "Tipo de Servicio"
        verbose_name_plural = "Tipos de Servicio"
        db_table = "tipo_de_servicio"
        ordering = ['id']

