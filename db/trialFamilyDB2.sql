-- Chore Table Trial Information
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Walk the dog', 'Take Lucy on a walk around the block', false, 1, 0, '2019-05-23');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Wash laundry', 'All laundry has to be washed, folded, and put away', 1, 1, 0, '2019-05-25');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Sweep Patio', 'Patio must be swept and organized', 1, 1, 0, '2019-05-25');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Feed Lucy', 'Make sure Lucy gets fed and fresh water', 1, 1, 0, '2019-05-23');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Wash dishes', 'Dishes must be washed after the last meal of the day', 1, 1, 0, '2019-05-23');
insert into chore
(chore_name, chore_details, chore_expire, chore_repeat, chore_done, chore_date)
    values
    ('Clean Bathroom', 'Tub, Toilet, Counter, mirror and floor must be cleaned', 0, 1, 0, '2019-05-25');

-- Reward Table Trial Information
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick the Movie', 'Gets to pick the movie the family watches for family night', 0, 1, 0, '2019-08-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick a restaurant', 'Gets to pick the restaurant for the next family meal out', 0, 1, 0, '2019-06-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pick a game', 'Gets to pick the game the family plays for family night', 0, 1, 0, '2019-07-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Pass a chore', 'Gets to pass off a single chore, one time, to another family member', 0, 1, 0, '2019-06-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Breakfast with a Parent', 'Gets to go out to breakfast with parent of choice', 0, 1, 0, '2019-07-23');
insert into reward
(reward_name, reward_details, reward_expire, reward_repeat, reward_done, reward_date)
    values
    ('Lunch with a Parent', 'Gets to go out to lunch with a parent of choice', 0, 1, 0, '2019-09-23');

-- Goal Table Trial Information
insert into goal
(goal_name, goal_details, goal_expire, goal_repeat, goal_done, goal_date)
    values
    ('Hollywood Bowl Concerts', 'Buying packs of tickets for the summer concert season', 1, 1, 0, '2019-06-07');
insert into goal
(goal_name, goal_details, goal_expire, goal_repeat, goal_done, goal_date)
    values
    ('Thanksgiving Dinner', 'Plan on hosting the dinner this year', 1, 1, 0, '2019-11-28');
insert into goal
(goal_name, goal_details, goal_expire, goal_repeat, goal_done, goal_date)
    values
    ('Family Vacation', 'Annual trip to Washington State', 1, 1, 0, '2019-06-13');
