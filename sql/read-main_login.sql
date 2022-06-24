SELECT pd.AccountID,
    pd.nickname as name,
    z.occupation,
    y.location,
    pd.MatchHow,
    pd.Introduce,
    x.hobby1,
    w.hobby2,
    v.hobby3,
    u.hobby4,
    t.hobby5,
    s.dogCat,
    r.longShort,
    q.sm,
    p.tools,
    o.trumpPutin,
    n.meals1,
    m.meals2,
    l.meals3,
    pd.age,
    pd.pic1,
    pd.pic2,
    pd.pic3
FROM `personal_data` pd
    inner join (
        select AccountID,
            c.name as occupation
        from personal_data pd
            join category c on pd.Occupation = c.code
        where Module = 'personal_data'
            and Type = 'occupation'
    ) z
    inner join (
        select AccountID,
            c.name as location
        from personal_data pd
            join category c on pd.Area = c.code
        where Module = 'personal_data'
            and Type = 'area'
    ) y
    inner join (
        select AccountID,
            c.name as hobby1
        from personal_preference pp
            join category c on pp.Hobby1 = c.code
        where Module = 'personality'
            and Type = 'hobby'
    ) x
    inner join (
        select AccountID,
            c.name as hobby2
        from personal_preference pp
            join category c on pp.Hobby2 = c.code
        where Module = 'personality'
            and Type = 'hobby'
    ) w
    inner join (
        select AccountID,
            c.name as hobby3
        from personal_preference pp
            join category c on pp.Hobby3 = c.code
        where Module = 'personality'
            and Type = 'hobby'
    ) v
    inner join (
        select AccountID,
            c.name as hobby4
        from personal_preference pp
            join category c on pp.Hobby4 = c.code
        where Module = 'personality'
            and Type = 'hobby'
    ) u
    inner join (
        select AccountID,
            c.name as hobby5
        from personal_preference pp
            join category c on pp.Hobby5 = c.code
        where Module = 'personality'
            and Type = 'hobby'
    ) t
    inner join (
        select AccountID,
            c.name as dogCat
        from personal_preference pp
            join category c on pp.CatOrDog = c.code
        where Module = 'personality'
            and Type = 'dogCat'
    ) s
    inner join (
        select AccountID,
            c.name as longShort
        from personal_preference pp
            join category c on pp.LongShort = c.code
        where Module = 'personality'
            and Type = 'longShort'
    ) r
    inner join (
        select AccountID,
            c.name as sm
        from personal_preference pp
            join category c on pp.SM = c.code
        where Module = 'personality'
            and Type = 'sm'
    ) q
    inner join (
        select AccountID,
            c.name as tools
        from personal_preference pp
            join category c on pp.Kinky = c.code
        where Module = 'personality'
            and Type = 'tools'
    ) p
    inner join (
        select AccountID,
            c.name as trumpPutin
        from personal_preference pp
            join category c on pp.PutinOrKim = c.code
        where Module = 'personality'
            and Type = 'trumpPutin'
    ) o
    inner join (
        select AccountID,
            c.name as meals1
        from personal_preference pp
            join category c on pp.Meals1 = c.code
        where Module = 'personality'
            and Type = 'meals'
    ) n
    inner join (
        select AccountID,
            c.name as meals2
        from personal_preference pp
            join category c on pp.Meals2 = c.code
        where Module = 'personality'
            and Type = 'meals'
    ) m
    inner join (
        select AccountID,
            c.name as meals3
        from personal_preference pp
            join category c on pp.Meals3 = c.code
        where Module = 'personality'
            and Type = 'meals'
    ) l
where pd.AccountID = z.AccountID
    and pd.AccountID = y.AccountID
    and pd.AccountID = x.AccountID
    and pd.AccountID = w.AccountID
    and pd.AccountID = v.AccountID
    and pd.AccountID = u.AccountID
    and pd.AccountID = t.AccountID
    and pd.AccountID = s.AccountID
    and pd.AccountID = r.AccountID
    and pd.AccountID = q.AccountID
    and pd.AccountID = p.AccountID
    and pd.AccountID = o.AccountID
    and pd.AccountID = n.AccountID
    and pd.AccountID = m.AccountID
    and pd.AccountID = l.AccountID