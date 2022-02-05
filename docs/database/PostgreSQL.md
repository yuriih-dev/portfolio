#### 1. Install PostgreSQL

```dotenv
https://www.postgresqltutorial.com/install-postgresql/
password: 1234
port: 5432
```

#### Create function

```postgresql
    create or replace function [FUNCTION_NAME](title text, ...)
    returns text/integer... as $[FUNCTION_NAME]$
    begin
    return [RETURN_VALUE]
    end;
    $[FUNCTION_NAME]$ language plpgsql
```

#### clean video title

```postgresql
    DO $$
    declare 
        trails text := 'Book|Chapter|Ch|Collection|Complete|Episode|Ep|Part|Pt|Season|Series|Session|Volume|Vol|Capítulo|Episódio|Parte|Staffel|Stagione|Temporada';
        title text :='Options';
        titles text[];
        array_size int;
    begin
    if title like '%:%' then 
        title = regexp_replace(title, ': ?(' || trails || ').*', '', 'gi'); 
    else 
        title = regexp_replace(title, '-? ?(' || trails || ')[^-]*', '', 'gi'); 
        if title like '%-%' then
            titles = string_to_array(title, '-');
            array_size = array_length(titles, 1);
            if length(titles[array_size]) > 1 then
                title = titles[array_size];
            else 
                title = titles[1];
            end if;
        end if;
    end if;
    
    if title like '%(%' then
        title = regexp_replace(title, '\(.*\)', '', 'gi');
        if title like '%:%' then
            titles = string_to_array(title, ':');
            title = titles[1];
        end if;
    end if;
    
    title = regexp_replace(title, '\[.*]', '', 'gi');
    titles = string_to_array(title, '_');
    title = titles[1];
    
    RAISE NOTICE '%', title;
    END $$
```

#### get top item

```postgresql
    declare 
        top_item text;
    begin
        with grouped as (
            select unnest(items) as item, count(*) as ct
            group by item
            order by ct desc
        )
        select item into top_item from grouped limit 1;
        return top_item;
    end;
```