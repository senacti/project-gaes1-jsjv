from django.shortcuts import render

def index(request):
    return render(request, 'index.html',{
                  
    })

def actividad(request):
    return render(request, 'actividad.html',{
                  
    })

def admin(request):
    return render(request, 'admin.html',{
                  
    })

def catalogoServicios(request):
    return render(request, 'catalogoServicios.html',{
                  
    })

def login(request):
    return render(request, 'login.html',{
                  
    })

def quienes(request):
    return render(request, 'quienes.html',{
                  
    })

def recordarContra(request):
    return render(request, 'recordarContra.html',{
                  
    })

def registros(request):
    return render(request, 'registros.html',{
                  
    })

def roles(request):
    return render(request, 'roles.html',{
                  
    })

def servicios(request):
    return render(request, 'servicios.html',{
                  
    })

def crudInventario(request):
    return render(request, 'crudInventario.html',{
                  
    })

def crudOT(request):
    return render(request, 'crudOT.html',{
                  
    })

def crudPago(request):
    return render(request, 'crudPago.html',{
                  
    })