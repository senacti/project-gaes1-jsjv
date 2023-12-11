from django.contrib import admin
from import_export.admin import ImportExportModelAdmin
# Register your models here.
from django.contrib import admin
from .models import Schedule, Salary
# Register your models here.

@admin.register(Salary)
class Salary(ImportExportModelAdmin):
    list_display = ('detailSalary', 'descriptionAccount','numberAccount','totalSalary','activities', 'schedules',)
    list_display_links=('activities', 'schedules',)
    list_editable=('numberAccount','totalSalary',)
    list_per_page=5


@admin.register(Schedule)
class Schedule(ImportExportModelAdmin):
    list_display = ('startDate', 'finalDate',)
    list_per_page=5