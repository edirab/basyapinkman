from django.shortcuts import render


def easy(request):
    breadcrumbs = [
                    {"Главная": ''},
                    {"Методика стихосложения": "easypoem"},
            ]
    context = {
        "breadcrumbs": breadcrumbs,
    }
    return render(request, 'easypoem/method.html', context)
