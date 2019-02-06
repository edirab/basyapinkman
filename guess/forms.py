from django.forms import ModelForm
from guess.models import GuessPoem


class GuessForm(ModelForm):
    class Meta:
        model = GuessPoem
        fields = ['author', 'id']
