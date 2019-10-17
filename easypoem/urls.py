
from django.urls import path
from easypoem import views

urlpatterns = [
    path('', views.easy, name='easypoem'),
    # path('test', views.testView, name='test'),
]
