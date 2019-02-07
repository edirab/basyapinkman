
from django.urls import path
from easypoem import views

urlpatterns = [
    path('', views.easy, name='easy'),
    # path('test', views.testView, name='test'),
]
