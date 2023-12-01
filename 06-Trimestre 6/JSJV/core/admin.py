from django.contrib import admin
from django.utils.html import mark_safe
from .models import Category,Product

#admin.site.register(Category)
#admin.site.register(Product)
admin.site.site_header = 'Bienvenido'

admin.site.index_title = 'JSJV'

@admin.register(Category)
class CategoryAdmin(admin.ModelAdmin):
    list_display = ('name',)

@admin.register(Product)
class ProductAdmin(admin.ModelAdmin):
    list_display = ('name', 'price','category',)
    list_display_links=('name',)
    list_editable=('price',)
    search_fields=('name',)
    list_filter=('category',)
    list_per_page=2


