from django.contrib import admin
from .models import OrderJob, ProductState, ProductList, OutputOJ, Income, TypeService
from import_export.admin import ImportExportModelAdmin
# Register your models here.

@admin.register(OrderJob)
class OrderJob(ImportExportModelAdmin):
    list_display = ('totalPrice', 'dateOT','amountOT',)
    list_display_links=('dateOT',)
    list_editable=('totalPrice','amountOT',)
    list_filter=('dateOT',)
    list_per_page=2

@admin.register(ProductState)
class ProductState(ImportExportModelAdmin):
    list_display = ('descriptionProduct',)
    list_display_links = ('descriptionProduct',)


@admin.register(ProductList)
class ProductListAdmin(ImportExportModelAdmin):
    list_display = ('amountProduct', 'descriptionProduct','statusProduct','categoryProduct','orderJob',)
    list_display_links=('orderJob',)
    list_editable=('amountProduct',)
    list_per_page=5


@admin.register(OutputOJ)
class OutputOJ(ImportExportModelAdmin):
    list_display = ('id', 'dateOutput', 'amountOutputs', 'productList')
    list_display_links=('productList',)
    list_editable=('amountOutputs',)
    list_per_page=5


@admin.register(Income)
class Income(ImportExportModelAdmin):
    list_display = ('paymentMethod', 'descriptionIncome','totalincome','orderJob',)
    list_display_links=('orderJob',)
    list_editable=('totalincome', 'paymentMethod',)
    list_per_page=5


@admin.register(TypeService)
class TypeService(ImportExportModelAdmin):
    list_display = ('descriptionTS','orderJob',)
    list_display_links=('orderJob',)
    list_per_page=5
