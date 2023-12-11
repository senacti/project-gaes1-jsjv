from django.contrib import admin
from .models import Machine,Inventory,Input
from import_export import resources
from import_export.admin import ImportExportModelAdmin
from django.shortcuts import redirect
from django.urls import reverse
@admin.register(Input)
class InputAdmin(ImportExportModelAdmin):
    list_display = ('product_type',)
    


@admin.register(Machine)
class MachineAdmin(ImportExportModelAdmin):
   list_display = ('machine_type',)
  



@admin.register(Inventory)
class InventoryAdmin(ImportExportModelAdmin):
    list_display = ('supplier_name', 'amount','input','machine',)
    list_display_links=('supplier_name',)
    list_editable=('amount',)
    search_fields=('supplier_name',)
    list_filter=('input','machine',)
    list_per_page=2

    actions = ['custom_button']

    def custom_button(self, request, queryset):

        url = reverse('PDFinve')
        return redirect(url)

    custom_button.short_description = 'Descargar PDF'
#admin.site.register(Machine)
#admin.site.register(Inventory)
#admin.site.register(Input)

