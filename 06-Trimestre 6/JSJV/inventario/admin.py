from django.contrib import admin
from .models import Machine,Inventory,Input
from import_export import resources
from import_export.admin import ImportExportModelAdmin

@admin.register(Input)
class InputAdmin(admin.ModelAdmin):
    list_display = ('product_type',)
    


@admin.register(Machine)
class MachineAdmin(admin.ModelAdmin):
   list_display = ('machine_type',)
  



@admin.register(Inventory)
class InventoryAdmin(admin.ModelAdmin):
    list_display = ('supplier_name', 'amount','input','machine',)
    list_display_links=('supplier_name',)
    list_editable=('amount',)
    search_fields=('supplier_name',)
    list_filter=('input','machine',)
    list_per_page=2
#admin.site.register(Machine)
#admin.site.register(Inventory)
#admin.site.register(Input)

