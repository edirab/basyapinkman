from django.shortcuts import render
from simple_search import search_filter
from poetry.models import Poem

# Poem.objects.filter(text__contains='крокодил')
# Create your views here.


def do_search(request):

    query = request.GET.get('search_string', "")
    search_fields = ['^title', 'text', ]
    f = search_filter(search_fields, query)
    results = Poem.objects.filter(f) # queryset

    breadcrumbs = [
                    {"Главная": '/poetry'},
                    {"Поиск": "#"},
            ]

    context = {
        "query": query,
        "results": results,
        "breadcrumbs": breadcrumbs,
    }
    #return render(request, 'search/appologise.html', context)
    return render(request, 'search/search_results.html', context)
