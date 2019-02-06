import random

from django.shortcuts import render
from poetry.views import sideBar
from guess.models import GuessPoem
from guess.forms import GuessForm


def guess(request):
    sideBarElems = sideBar()
    guess_form = None
    rightAnswer = None

    breadcrumbs = [
                    {"Главная": ''},
                    {"Угадай автора": "guess"},
            ]

    if request.method == 'POST':
        poem_id = request.POST['guess_poem_id']
        random_poem = GuessPoem.objects.filter(id=poem_id).first()

        if random_poem is not None:
            guess_form = GuessForm(data=request.POST)

            if guess_form.is_valid():
                guess_author = guess_form.cleaned_data['author']

                if random_poem.author.upper() in guess_author.upper():
                    rightAnswer = True
                else:
                    rightAnswer = False
            else:
                guess_form = GuessForm
    # GET method
    else:
        guess_form = GuessForm
        guess_poems = GuessPoem.objects.all()
        random.seed()
        random_id = random.randint(0, guess_poems.__len__())
        random_poem = guess_poems.filter(id=random_id).first()

    context = {
            "sideBarElems": sideBarElems,
            "random_poem": random_poem,
            "guess_form": guess_form,
            "rightAnswer": rightAnswer,
            "breadcrumbs": breadcrumbs,
            }
    return render(request, 'guess/guess_page.html', context)
