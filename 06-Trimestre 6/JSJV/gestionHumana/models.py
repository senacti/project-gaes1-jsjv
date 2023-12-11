from django.db import models
from actividades.models import Activity 

class Schedule(models.Model):
    startDate = models.DateField(verbose_name="Inicio Horario", blank=True, null=True)
    finalDate = models.DateField(verbose_name="Fin Horario", blank=True, null=True)

    def __str__(self):
        return f"{self.startDate} - {self.finalDate}"

    class Meta: 
        verbose_name = "Horario"
        verbose_name_plural = "Horarios"
        db_table = "horario"
        ordering = ['id']

class Salary(models.Model):
    detailSalary = models.TextField(verbose_name="Detalle salario", blank=True, null=True)
    descriptionAccount = models.TextField(verbose_name="Descripcion Ingresos", blank=True, null=True)
    numberAccount = models.IntegerField(verbose_name="Numero de Cuenta", blank=True, null=True)
    totalSalary = models.IntegerField(verbose_name="Total salario")
    #activities = models.ForeignKey(Activity, on_delete=models.CASCADE)
    activities = models.ForeignKey(Activity, on_delete=models.CASCADE, related_name='salaries')
    schedules = models.ForeignKey(Schedule, on_delete=models.CASCADE)

    def __str__(self):
        return self.totalSalary
    
    class Meta: 
        verbose_name = "Salario"
        verbose_name_plural = "Salarios"
        db_table = "sueldo"
        ordering = ['id']

