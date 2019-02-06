from django.db import models
from django.utils import timezone
from django.contrib.auth.models import User


# Класс стихотворения
class Poem(models.Model):
    """Модель, описывающая стихотворение"""
    title = models.CharField(max_length=100)
    #image_name = models.CharField(max_length=80)
    text = models.TextField()
    image = models.ImageField(default='default.jpg', upload_to='img/')

    # default=now()
    date_added = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        """Возвращает строковое представление стиха"""
        return self.title + " | " + self.text[:30]


class Comment(models.Model):
    class Meta:
        verbose_name = 'Comment'
        verbose_name_plural = 'Comments'
        db_table = "comments"

    comment_text = models.TextField()
    comment_poem = models.ForeignKey(Poem, related_name='comments', on_delete=models.CASCADE)
    comment_author = models.ForeignKey(User, on_delete=models.CASCADE)
    comment_pub_date = models.DateTimeField('Дата комментария', default=timezone.now)
    is_active = models.BooleanField(default=True)

    def __str__(self):
        return self.comment_text[0:200]


# информация на правой боковой панели
class sideBarInfo(models.Model):
    is_active = models.BooleanField(default=True)
    text = models.CharField(max_length=512)
    link = models.CharField(max_length=512, default=None)
    date_added = models.DateTimeField(default=timezone.now())
    priority = models.IntegerField(default=0)

    def __str__(self):
        string = self.text[:20]
        if self.is_active:
            string += ': active '
        else:
            string += ': non-active '
        string += 'p: ' + str(self.priority) + ' '
        string += self.link[:10]
        return string


class aboutBasya(models.Model):
    img_name = models.CharField(max_length=100)
    full_name = models.CharField(max_length=256)
    text = models.TextField()

    def __str__(self):
        string = self.full_name + ' | ' + self.text[:20]
        return string

