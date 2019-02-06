from django.urls import path
from users import views
from django.contrib.auth.views import auth_login


urlpatterns = [
    # path('', views.index, name='index'),
    path('register/', views.register, name='register'),
    path('login/', views.user_login, name='login'),
    path('logout/', views.user_logout, name='logout'),
    path('profile/', views.profile, name='profile'),
]
