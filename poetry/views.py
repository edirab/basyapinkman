from django.shortcuts import render, HttpResponse, get_object_or_404
from .models import Poem, Comment, sideBarInfo, aboutBasya
from .forms import CommentForm
from django.core.paginator import Paginator, EmptyPage, PageNotAnInteger
from django.contrib.auth.models import User
# Create your views here.


def sideBar():
    sideBarElements = sideBarInfo.objects.filter(is_active=True).order_by('-priority')
    return sideBarElements


def index(request):
    latestPoems = Poem.objects.order_by('-date_added')[:6]
    sideBarElems = sideBar()

    context = {"latestPoems": latestPoems,
               "sideBarElems": sideBarElems}
    return render(request, 'poetry/index.html', context)


def currentPoem(request, poem_id):
    sideBarElems = sideBar()
    currPoem = get_object_or_404(Poem, id=poem_id)
    # currPoem = Poem.objects.get(id=poem_id)

    breadcrumbs = [
                    {"Главная": '/'},
                    {"Архив": "allpoems"},
                    {currPoem.title : currPoem.id},
            ]

    comments = Comment.objects.filter(comment_poem=poem_id).filter(is_active=True)
    error = False

    poem_list = Poem.objects.order_by('id')
    paginator = Paginator(poem_list, 1)
    max_pages = paginator.num_pages
    try:
        poem_list = paginator.page(poem_id)
    except PageNotAnInteger:
        poem_list = paginator.page(1)
    except EmptyPage:
        poem_list = paginator.page(paginator.num_pages)

    # A comment was posted
    if request.method == 'POST':
        comment_form = CommentForm(data=request.POST)
        if request.user.is_authenticated:
            if comment_form.is_valid():
                # Create Comment object but don't save to database yet
                new_comment = comment_form.save(commit=False)
                # Assign the current post to the comment
                new_comment.comment_poem = currPoem
                new_comment.comment_author = request.user
                new_comment.save()
        else:
            error = True
    else:
        comment_form = CommentForm()

    context = {
                "sideBarElems": sideBarElems,
                "currPoem": currPoem,
                "breadcrumbs": breadcrumbs,
                "poem_list": poem_list,
                "max_pages": max_pages,

                "commentForm": comment_form,
                "comments": comments,
                "error": error,
               }
    return render(request, 'poetry/singlePoem.html', context)


def buildarchive(request):
    allPoems = Poem.objects.all()
    sideBarElems = sideBar()

    breadcrumbs = [
                    {"Главная": '/'},
                    {"Архив": "allpoems"},
            ]

    list_left = list()

    context = {
                "allPoems": allPoems,
                "sideBarElems": sideBarElems,
                "breadcrumbs": breadcrumbs,
                }
    return render(request, 'poetry/archive.html', context )


def media(requset):
    sideBarElems = sideBar()
    breadcrumbs = [
                    {"Главная": '/'},
                    {"Медиа": "media"},
            ]
    context = {
                "sideBarElems": sideBarElems,
                "breadcrumbs": breadcrumbs,
               }
    return render(requset, 'poetry/media.html', context)


def about(request, aboutBasya_id):
    author = get_object_or_404(aboutBasya, id=aboutBasya_id)

    breadcrumbs = [
                    {"Главная": '/'},
                    {"О команде": ""},
                    {author.full_name: author.id},
            ]

    # author = aboutBasya.objects.filter(id=aboutBasya_id)
    sideBarElems = sideBar()
    context = {"author": author,
               "sideBarElems": sideBarElems,
               "breadcrumbs": breadcrumbs,
               # "aboutBasya_id": aboutBasya_id,
               }
    return render(request, 'poetry/about.html', context)


def testView(request):
    currPoem_id = 2
    currPoem_title = "alolk"
    breadcrumbs = [
                    {"Главная": '/'},
                    {"Архив": "allpoems"},
                    {currPoem_title : currPoem_id},
            ]

    context = {"breadcrumbs": breadcrumbs}

    string = "-=-=-= "
    for elem in context:
        if elem.title() == "breadcrumbs":
            string += "00"
            for item in elem:
                string += item.title() + " -> " + item.title() + '\n'
    # return HttpResponse(string)
    return render(request, 'breadcrumbs.html', context)
