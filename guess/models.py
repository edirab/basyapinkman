from django.db import models


class GuessPoem(models.Model):
    author = models.CharField(max_length=200)
    text = models.TextField()

    def __str__(self):
        return str(self.author + ' | ' + self.text[:20])
