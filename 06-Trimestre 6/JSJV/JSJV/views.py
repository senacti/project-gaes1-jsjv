from django.shortcuts import render
from django.shortcuts import redirect
from django.contrib.auth import login
from django.contrib.auth import logout
from django.contrib.auth import authenticate
from django.contrib import messages

#Importar el form de la creacion de Usuarios 
from .forms import CustomUserCreationForm
from django.contrib.auth import authenticate, login

#Nesesario paara que sea obligatorio el registrarse 
from django.contrib.auth.decorators import login_required

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
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        user = authenticate(username=username, password=password)
        if user:
            login(request, user)
            messages.success(request, 'Bienvenido {}'.format(user.username))
            return redirect('index')
        else: 
            messages.error(request, 'Usuario o contraseña incorrectos')
    return render(request, 'registration/login.html',{
        
    })

def exit_view(request):
    logout(request)
    return redirect('index')

def quienes(request):
    return render(request, 'quienes.html',{
                  
    })

def recordarContra(request):
    return render(request, 'recordarContra.html',{
                  
    })

#Creación de usuarios 
def registros(request):
    data = {
        'form':CustomUserCreationForm()
    }

    if request.method == 'POST':
        user_creation_form = CustomUserCreationForm (data=request.POST)

        if user_creation_form.is_valid():
            user_creation_form.save()

            user= authenticate (username= user_creation_form.cleaned_data['username'], password= user_creation_form.cleaned_data['password1'])
            login(request, user)
            return redirect('index')

    return render(request, 'registration/registros.html',data)
                  
    

def roles(request):
    return render(request, 'roles.html',{
                  
    })

def servicios(request):
    return render(request, 'servicios.html',{
                  
    })

@login_required
def crudInventario(request):
    return render(request, 'crudInventario.html',{
                  
    })

def crudOT(request):
    return render(request, 'crudOT.html',{
                  
    })

def crudPago(request):
    return render(request, 'crudPago.html',{
                  
    })