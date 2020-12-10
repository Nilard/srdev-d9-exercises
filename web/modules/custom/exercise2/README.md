# Task [EXERCISE-2]
### Ticket Description:
Greetings, Last Call Media! We have recently hired a new writing team, and as a result our content is really amazing! In fact, it's so amazing that we want to institute a paywall for some `article` nodes that we are publishing.

Our requirements are:
- Users already log in to our site. Currently, they only have the `authenticated user` role. We have gone ahead and created a new role: `premium`. This new `premium` role will need a new permission: `view full premium content`.
- We do not want to paywall _all_ of the `article` content on our site. We have added a new field to the `article` content type (`field_is_premium`). _Only_ articles that have field checked should have the paywall active.
- If a node has `field_is_premium` checked, then users **without** this new permission should see the `summary` _even when they are viewing a full node display_. If they **do** have this new permission, then they should _not_ see the summary, they should see the full body content.
- Users who do _not_ get to see the full premium content should get notice on the page that says that the full content is only available with a `premium` account.

### For testing:

#### We have two users created:
- A standard user who does **not** have this new role/permission exists with these credentials:
  - username: `standard_user`
  - password: `standard_user`
- a premium user who **does** have this new role exists with these credentials:
  - username: `premium_user`
  - password: `premium_user`

#### We also have sample article content created:
- Two _standard_ articles that should _not_ have a paywall:
  - https://code.lndo.site/no-paywall-1
  - https://code.lndo.site/no-paywall-2
- Two _premium_ articles that _should_ have a paywall:
  - https://code.lndo.site/paywall-1
  - https://code.lndo.site/paywall-2

---

We have two concerns here:
- We have heard that caching in Drupal is very powerful, but also (potentially) pretty confusing. We do not want a situation where a `premium` user views a piece of premium content, and then a standard user gets to see the full article because it is stuck in the cache.
- Our readers are very smart. We do not want them to be able to change css using the web inspector to gain access to the full article, if possible.

Thanks so much!\
Your favorite (fake) client.

PS: Please keep all related code in the `exercise2` module or the `exercise` theme, except for any configuration exports that may be needed.
