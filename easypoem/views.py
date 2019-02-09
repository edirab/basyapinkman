from django.shortcuts import render
from poetry.views import sideBar


def easy(request):
    sideBarElems = sideBar()
    breadcrumbs = [
                    {"Главная": '/'},
                    {"Методика стихосложения": "easypoem"},
            ]
    context = {
        "breadcrumbs": breadcrumbs,
        "sideBarElems": sideBarElems,
    }
    return render(request, 'easypoem/method.html', context)
