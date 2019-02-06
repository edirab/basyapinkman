
from django.http import HttpResponseRedirect
from poetry import urls


def index(request):
    return HttpResponseRedirect('/poetry')

