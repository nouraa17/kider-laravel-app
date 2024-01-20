testimonials:
name
profession
description
image
published
softDeletes

appointments:
guardianName
guardianEmail
childName
childAge
message

contacts:
name
email
subject
message

teachers:
fullName
designation
image
fb
tw
inst

subjects:
subjectName
teacherId
price
age
time
capacity

///////////////////////////////*************************////////////////////////////////////
creating Testimonial model
creating TestimonialController
in TestimonialController -> index method
in TestimonialController -> create method
in TestimonialController -> store method
///////////////////////////////*************************////////////////////////////////////
appointments -> from the form to database and show the info in table and show page -- delete
contact -> store in database and send email
///////////////////////////////*************************////////////////////////////////////
extra
make column unread messages in contact us based on show button -> by adding new column boolean
make pagination
dashboard entery to the verfied user only