# API Documentation

All requests should use the JSON format.

## Users

### POST api/users

Create a new user.

#### Parameters

Parameter             | Type     | Description                | Validation
:-                    | :-       | :-                         | :-
name                  | `string` | The desired username.      | Required. Can only contain alphanumeric characters and dashes. Min length 3. Max length 20. Must be unique.
password              | `string` | The desired password.      | Required. Must match `password_confirmation`.
password_confirmation | `string` | The password confirmation. | Required. Must match `password`.

#### Output

Returns new user object with `201 Created`.

### GET api/users/:id

Get a specific user matching the given ID.

#### Output

Returns user object with `200 OK`.

### PUT api/users/:id

Update a specific user matching the given ID.

Not fully implemented.

### DELETE api/users/:id

Delete a specific user matching the given ID.

Not fully implemented.

### GET api/users

Get a list of all users.

Not fully implemented.

### GET api/account/authcheck

Check to see if the user is signed in.

#### Output

Returns `true` or `false` to indicate if the user is signed in.

### GET api/account/signout

Sign out the current user.

### POST api/account/authenticate

Authenticate a user.

#### Parameters

Parameter | Type     | Description
:-        | :-       | :-
name      | `string` | The user's username.
password  | `string` | The user's password.

#### Output

Returns `true` or `false` to indicate if the user has been authenticated.

## Forms

### POST api/forms

Create a new form.

Not fully implemented.

### GET api/forms/:id

Get a specific form matching the given ID.

Not fully implemented.

### PUT api/forms/:id

Update a specific form matching the given ID.

Not fully implemented.

### DELETE api/forms/:id

Delete a specific form matching the given ID.

Not fully implemented.

### GET api/forms

Get a list of all forms.

Not fully implemented.
