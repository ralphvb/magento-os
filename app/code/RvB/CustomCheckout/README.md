# Challenges!

Add a step to the end of the checkout process
Here is a challenge for you. In this task, you'll attempt to add a new step to the end of the checkout process.

I'll provide you with some general guidelines, but it's up to you to implement this task.

User Story / Summary
As a website visitor, I need to be able to submit my doctor's name and phone number before placing an order.

Details
Our site sells prescription contacts, and we need to be able to confirm user's prescriptions with their order. In order to do this, we would like to request the user's doctor name and phone number on a new step in the checkout process.

The checkout step should come last, after all other default checkout steps. The display should be two input fields.

Technical Assumptions
There is no need to save the data or pass it to an API at the moment, as that will be implemented in a future task. However, so you understand where to do this, issue a console.log somewhere in the code where it would be a great place to send this data to an internal or external API call.

---

Here is a challenge for you. In this task, you'll need to restyle the discount code component that we moved around in the previous step.

I'll provide you with some general guidelines, but it's up to you to implement this task.

Note: Even though we didn't cover CSS or styles, try to attempt this task. If you get stuck on where to put your CSS,
User Story / Summary
As a website visitor, I need to be able to submit my discount code in a pretty box that matches the rest of the styles on the site.

Details
The discount code component should be styled just like the core discount code component placement, with the blue link & chevron next to "Apply Discount Code".

Visual Mockup
The component should show be updated for both of the following component placements.

- The sidebar: Check https://courses.m.academy/courses/1526126/lectures/37830003

- The summary: Check https://courses.m.academy/courses/1526126/lectures/37830003

The view should closest resemble the default styling of this component, updated considering the width of the sidebar & responsive constraints:

Technical Assumptions
Ideally, the discount code component should be able to moved to any area in the checkout, and the styles should remain consistent & still work no matter the placement of the component.

---

Here is a challenge for you. In this task, you'll use your previous knowledge of UI Components and importing components to create a new component only displayed for logged in users.

I'll provide you with some general guidelines, but it's up to you to implement this task.

User Story / Summary
As a logged in customer, I'd like to be able to get assistance from the store's phone number during checkout.

Details
Create a new component at the top right of the screen that only displays for logged in users. The component should follow the format:

"Welcome {FIRST_NAME}! Need help? call us at {STORE_NUMBER}"

The {FIRST_NAME} value should be replaced by the value of the currently logged-in user's first name.

The {STORE_NUMBER} value should be replaced with the store's phone number, pulled out of the store configuration in Magento.

Display this content at the top right of the screen at checkout.

Visual Mockup
Logged out users are shown a "Sign In" link: Check https://courses.m.academy/courses/1526126/lectures/37830215

Logged in users are not shown this link. We should display this link only for logged in users in the same area as this Sign In link.

---

Here is a challenge for you. In this task, you'll use your previous knowledge of UI Components and layout XML to implement this task.

I'll provide you with some general guidelines, but it's up to you to implement this task.

User Story / Summary
As a visitor, I'd like to see a message that notifies me when I'm under $100 of items in my cart, and when I meet that criteria, it should show me a promo code to use for 10% off my entire order.

Details
Create a new component in the checkout sidebar. If there is under $100 of items in my cart (subtotal), I should see the message:

"Add $XX.XX of items to your cart to receive a promo code for 10% off your entire order."

This message should only be displayed during the Shipping step, or earlier, of the checkout process.

Once the user reaches a $100 subtotal of items in their cart, display the message:

"Congrats! Use promo code GET100 for 10% off your entire order."

Visual Mockup
This custom component should be displayed in the sidebar order summary component, below the "Order Summary" heading and above the "X Items in Cart" text: CHeck https://courses.m.academy/courses/1526126/lectures/37830384

Implement the most non-invasive method of adding a custom UI component & template to this area.

---

Oops! The Email checkout step that we created in this course is blanked for logged in users, so here is a challenge for you.

I'll provide you with some general guidelines, but it's up to you to implement this task.

User Story / Summary
As a logged in user, I'd like to see my current email address in the Email checkout step, and update it if I need to.

Details
Logged in users should be able to see the email address field just like logged out users. This gives them a chance to confirm their email address, and update if necessary.

If the user updates their email address, clicking Next should apply the updates to their account and update their related email address.

Be sure this code is backwards-compatible and still works for logged out users.

---

# Future project ideas

1. <b>Last-Minute Add-ons:</b> Create a new checkout step just before order placement where customers can add small, impulse-buy items to their order. This will test your skills in adding new checkout steps and working with UI components.

2. <b>Delivery Instructions Field:</b> Add a text area to the shipping address form where customers can provide specific delivery instructions, like "Leave package behind the potted plant". This project will reinforce your knowledge of customizing address form fields.

3. <b>Price Breakdown Order Summary:</b> Customize the order summary to show a detailed breakdown of prices, taxes, and fees in a visually appealing way. This will challenge you to work with UI components and templates.

4. <b>Charity Round-Up:</b> Add a dynamic sidebar component allowing customers to round up their order total to the nearest dollar for charity. This project will utilize your skills with checkout config providers and UI components.

5. <b>Address Nickname Validator:</b> Create a custom validator for a new "Address Nickname" field and validate it matches the allowed characters. This will test your ability to add custom fields and implement custom validation rules.