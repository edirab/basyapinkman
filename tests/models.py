from django.db import models

# Create your models here.


class Question(models.Model):
    question = models.TextField()
    answers = []

    def __str__(self):
        return self.question[:10] + "|" + str(self.answers)


class Test(models.Model):
    caption = models.CharField()
    annotation = models.TextField()
    Questions = Question()
