from django.shortcuts import render


def easy(request):
    context = {}
    return render(request, 'easypoem/method.html', context)
