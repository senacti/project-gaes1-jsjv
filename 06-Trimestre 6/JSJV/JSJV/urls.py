"""
URL configuration for JSJV project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path, include 
from .views import exit_view
from .views import login_view

from . import views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', views.index, name='index'),
    path('actividad/', views.actividad, name='actividad'),
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
    path('crudInventario/', views.crudInventario, name='crudInventario'),
    path('crudOT/', views.crudOT, name='crudOT'),
    path('crudPago/', views.crudPago, name='crudPago'),

]
