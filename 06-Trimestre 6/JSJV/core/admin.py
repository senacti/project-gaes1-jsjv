from django.contrib import admin
from .models import Category,Product

#admin.site.register(Category)
#admin.site.register(Product)

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

