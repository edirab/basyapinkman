# urls guess

from django.urls import path
from guess import views


urlpatterns = [
    path('', views.guess, name='guess'),
    # path('<int:poem_id>', views.currentPoem),
]
