-- Database for the Family Chore Tracker
-- Account Table
create table account (
    account_pk          serial not null primary key,    -- account ID
    account_marker      varchar(13) not null unique     -- additional unique marker
);

-- Parent Table
create table parent (
    parent_pk           serial not null primary key,    -- parent ID
    parent_fname        varchar(20) not null,           -- first name
    parent_last         varchar(20) not null,           -- last name
    parent_bday         date[] not null,                -- birthdate
    parent_display      varchar(20) not null,           -- display name
    parent_password     varchar(120) not null           -- hashed password
);

-- Child Table
create table child (
    child_pk            serial not null primary key,    -- child ID
    child_fname         varchar(20) not null,           -- first name
    child_lname         varchar(20) not null,           -- last name
    child_bday          date[] not null,                -- birthday
    child_display       varchar(20) not null,           -- display name
    child_passwork      varchar(120) not null           -- hashed password
);

-- Chore Table
create table chore (
    chore_pk            serial not null primary key,    -- chore ID
    chore_name          varchar(80) not null,           -- name of chore
    chore_details       text not null,                  -- details surrounding the chore
    chore_expire        boolean not null,               -- Does the chore expire
    chore_repeat        boolean not null,               -- Does the chore repeat
    chore_done          boolean not null,               -- Is the chore completed
    chore_date          date[] not null                 -- date chore expires
);

-- Reward Table
create table reward (
    reward_pk           serial not null primary key,    -- reward ID
    reward_name         varchar(80) not null,           -- name of reward
    reward_details      text not null,                  -- details surrounding the reward
    reward_expire       boolean not null,               -- Does the reward expire
    reward_repeat       boolean not null,               -- Does the reward repeat
    reward_done         boolean not null,               -- Is the reward completed
    reward_date         date[] not null                 -- date reward expires
);

-- Steps Table
create table steps (
    steps_pk            serial not null primary key,    -- steps ID
    steps_details       varchar(120) not null,          -- step details
    steps_done          boolean not null                -- Is the step completed
);

-- Goal Table
create table goal (
    goal_pk        serial not null primary key,    -- goal ID
    goal_name      varchar(80) not null,           -- name of goal
    goal_details   text not null,                  -- details surrounding the goal
    goal_expire    boolean not null,               -- Does the goal expire
    goal_repeat    boolean not null,               -- Does the goal repeat
    goal_done      boolean not null,               -- Is the goal completed
    goal_date      date[] not null,                -- date goal expires
    goal_steps_fk  int not null references steps(steps_pk)-- references the steps
);

-- Family Table
create table family (
    family_pk           serial not null primary key,                -- family ID
    family_chore_fk     int not null references chore(chore_pk),    -- reference chore ID
    family_goal_fk      int not null references goal(goal_pk),      -- reference goal ID
    family_reward_fk    int not null references reward(reward_pk),  -- reference reward ID
    family_parent_fk    int not null references parent(parent_pk),  -- reference parent ID
    family_child_fk     int not null references child(child_pk),    -- reference child ID
    family_account_fk   int not null references account(account_pk) -- reference account ID
);

















