
from django.contrib import admin
from django.urls import path, include 
from .views import exit_view
from .views import login_view
from .views import PDFacti
from .views import PDFinve

from . import views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', views.index, name='index'),
    path('admin/', views.actividad, name='actividad'),
    path('admin/', admin.site.urls, name='admin:index'),#Ruta login#
    path('logout/', exit_view, name='exit'),
    path('accounts/', include('django.contrib.auth.urls')),
    path('catalogoServicios/', views.catalogoServicios, name='catalogoServicios'),
    path('login/', login_view, name='login'),
    path('quienes/', views.quienes, name='quienes'),
    path('recordarContra/', views.recordarContra, name='recordarContra'),
    path('registros/', views.registros, name='registros'),
    path('roles/', views.roles, name='roles'),
    path('servicios/', views.servicios, name='servicios'),
    path('admin/', views.crudInventario, name='crudInventario'),
    path('admin/', views.crudOT, name='crudOT'),
    path('pago/', views.crudPago, name='crudPago'),
    path('pdfActi/', PDFacti.as_view(), name='pdfActi'),
    path('PDFinve/', PDFinve.as_view(), name='PDFinve'),

]
