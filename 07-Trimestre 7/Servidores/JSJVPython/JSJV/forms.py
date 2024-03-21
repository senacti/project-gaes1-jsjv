from django import forms
from django.contrib.auth.models import User
from django import forms


class RegisterForm(forms.Form):
    username = forms.CharField(required=True, 
                                 min_length=4, max_length=50,
                                widget=forms.TextInput(attrs={
                                    'class': 'input', 
                                    'id': 'username'
                                    }))
    email = forms.EmailField(required=True,
                             widget=forms.EmailInput(attrs={
                                    'class': 'input', 
                                    'id': 'email'
                                    }))
    password = forms.CharField(required=True,
                               widget=forms.PasswordInput(attrs={
                                    'class': 'input', 
                                    'id': 'password' 
                                    }))
    password2 = forms.CharField(required=True,
                               widget=forms.PasswordInput(attrs={
                                    'class': 'input', 
                                    'id': 'password' 
                                    }))
    def clean_username(self):
        username = self.cleaned_data.get('username')

        if User.objects.filter(username=username).exists():
            raise forms.ValidationError('Este Usuario ya se encuentra registrado')
        
        return username
    
    def clean_email(self):
        email = self.cleaned_data.get('email')

        if User.objects.filter(email=email).exists():
            raise forms.ValidationError('Este Correo ya se encuentra registrado')
        
        return email
    
    def clean(self):
        cleaned_data = super().clean()

        if cleaned_data.get('password2') != cleaned_data.get('password'):
            self.add_error('password2', 'Las contraseñas no coinciden')

    def save(self):
        return User.objects.create_user(
                self.cleaned_data.get('username'),
                self.cleaned_data.get('email'),
                self.cleaned_data.get('password'),
            ) 
