from django.shortcuts import render
from django.shortcuts import redirect
from django.contrib.auth import login
from django.contrib.auth import logout
from django.contrib.auth import authenticate
from django.contrib import messages

#Importar el form de la creacion de Usuarios 
from .forms import CustomUserCreationForm
from django.contrib.auth import authenticate, login
from django.contrib.auth.forms import UserCreationForm

#Nesesario paara que sea obligatorio el registrarse 
from django.contrib.auth.decorators import login_required
#correos
from django.core.mail import EmailMessage
from django.template.loader import render_to_string
from django.conf import settings


def quienes(request):
    if request.method == "POST":
        name = request.POST['name']
        email = request.POST['email']
        subject = request.POST['subject']
        message = request.POST['message']
        
        template = render_to_string('email_template.html', {
            'name': name,
            'email': email,
            'message': message
        })
    
        email = EmailMessage(
            subject,
            template,
            settings.EMAIL_HOST_USER,
            ['vs157918@gmail.com',]
        )
    
        email.fail_silently = False
        email.send()
    
    return render(request, 'quienes.html',{

    })
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

def login_view(request):
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
    return render(request, 'registration/login.html', {})

def exit_view(request):
    logout(request)
    return redirect('index')

def quienes(request):
    return render(request, 'quienes.html',{
                  
    })

def recordarContra(request):
    return render(request, 'recordarContra.html',{
                  
    })

# Creación de usuarios
def registros(request):
    if request.method == 'POST':
        form = CustomUserCreationForm(request.POST)
        if form.is_valid():
            user = form.save()
            login(request, user)
            # Puedes redirigir a la página que desees después del registro
            return redirect('index')
    else:
        form = CustomUserCreationForm()
    return render(request, 'registration/registros.html', {'form': form})

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
