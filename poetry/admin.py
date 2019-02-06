from django.contrib import admin
from poetry.models import Poem, Comment, sideBarInfo, aboutBasya


class PoemAdmin(admin.ModelAdmin):
    list_display = ('title', 'get_text', 'date_added')
    ordering = ('-title',)

    def get_text(self, obj):
        return obj.text[:50]
    get_text.short_description = "text"


class CommentInline(admin.StackedInline):
    model = Comment
    # extra = 2


class CommentAdmin(admin.ModelAdmin):
    # list_display = ("title", "image", "price", "date")
    # ordering = ("comment_pub_date",)
    # inlines = [CommentInline]
    pass

admin.site.register(Poem, PoemAdmin)
admin.site.register(Comment, CommentAdmin)
admin.site.register(sideBarInfo)
admin.site.register(aboutBasya)

