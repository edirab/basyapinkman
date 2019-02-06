
# urls poerty

from django.urls import path
from poetry import views

urlpatterns = [
    path('', views.index, name='index'),
    path('<int:poem_id>', views.currentPoem),
    path('allpoems/', views.buildarchive, name='allPoems'),
    path('media/', views.media, name='media'),
    path('about/<int:aboutBasya_id>', views.about, name='about'),

    path('test', views.testView, name='test'),
    # path('404', )

]

