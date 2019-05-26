from django.shortcuts import render
from django.core.mail import send_mail
from django.contrib.auth.models import User


# Create your views here.
def index(request):

    '''
    allUsers = User.objects.all()
    email_list = []
    for i in range(1, len(allUsers)+1):
        user = allUsers.get(pk=i)
        email_list.append(user.email)
    # email_list = [ email for email in allUsers.filter(email)]
    '''

    email_list = []
    allEmails = User.objects.raw('select id, email from auth_user')
    for adress in allEmails:
        email_list.append(adress.email)

    context = {
        'email_list': email_list,
    }
    '''    send_mail(
        'Subject here',
        'Here is the message.',
        'from@example.com',
        email_list,
        fail_silently=False,
    )'''

    return render(request, 'sendmail/index.html', context)
