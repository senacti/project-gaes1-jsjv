from django.db import models

# Create your models here.
class Novelty (models.Model):
    dateN = models.DateField (verbose_name="Fecha de la Novedad")
    descriptionN = models.TextField(verbose_name="Descripción Novedad")
    stateN = models.CharField(max_length=50,verbose_name="Estado Novedad")
    # Esto puede ser una tabla fuerte typeN = models.CharField(max_length=50,verbose_name="Tipo Novedad")

    def __str__(self):
        return self.descriptionN
    
    class Meta:
        verbose_name="Novedad"
        verbose_name_plural="Novedades"
        db_table="novedad"
        ordering=['id']

class StateAc (models.Model):
    stateAc = models.CharField(max_length=200,verbose_name="Estado de las Actividades")

    def __str__(self):
        return self.stateAc
    
    class Meta: 
        verbose_name="EstadoAc"
        verbose_name_plural="EstadosAc"
        db_table="estadosac"
        ordering=['id']


class Activity (models.Model):
    dateAc= models.DateField(verbose_name="Fecha Actividad")
    timeAc = models.DurationField(verbose_name="Tiempo de desarrollo actividad", blank=True, null=True)
    descriptionAc = models.TextField(verbose_name="Descripción Actividad")
    noveltyAc = models.ForeignKey(Novelty,on_delete=models.CASCADE)
    stateAc= models.ForeignKey(StateAc,on_delete=models.CASCADE)
    orderJob= models.IntegerField(verbose_name="Orden de trabajo")
    inventory= models.IntegerField(verbose_name="Inventario")
    salary= models.IntegerField(verbose_name="Salario")

    def __str__(self):
        return self.descriptionAc
    
    class Meta: 
        verbose_name="Actividad"
        verbose_name_plural="Actividades"
        db_table="actividades"
        ordering=['id']


