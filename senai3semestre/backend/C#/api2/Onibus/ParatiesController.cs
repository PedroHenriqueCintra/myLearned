using System;
using System.Collections.Generic;
using System.Linq;

using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using api2.Data;

namespace api2.Onibus
{
    [Route("api/[controller]")]
    [ApiController]
    public class ParatiesController : ControllerBase
    {
        private readonly api2Context _context;

        public ParatiesController(api2Context context)
        {
            _context = context;
        }

        // GET: api/Paraties
        [HttpGet]
        public async Task<ActionResult<IEnumerable<ParatyModel>>> GetParaty()
        {
            return await _context.Paratys.ToListAsync();
        }

        // GET: api/Paraties/5
        [HttpGet("{id}")]
        public async Task<ActionResult<ParatyModel>> GetParaty(Guid id)
        {
            var paraty = await _context.Paratys.FindAsync(id);

            if (paraty == null)
            {
                return NotFound();
            }

            return paraty;
        }

        // PUT: api/Paraties/5
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPut("{id}")]
        public async Task<IActionResult> PutParaty(Guid id, ParatyModel paraty)
        {
            if (id != paraty.id)
            {
                return BadRequest();
            }

            _context.Entry(paraty).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!ParatyExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/Paraties
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPost]
        public async Task<ActionResult<ParatyModel>> PostParaty(ParatyModel paraty)
        {
            _context.Paratys.Add(paraty);
            await _context.SaveChangesAsync();

            return CreatedAtAction("GetParaty", new { id = paraty.id }, paraty);
        }

        // DELETE: api/Paraties/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> DeleteParaty(Guid id)
        {
            var paraty = await _context.Paratys.FindAsync(id);
            if (paraty == null)
            {
                return NotFound();
            }

            _context.Paratys.Remove(paraty);
            await _context.SaveChangesAsync();

            return NoContent();
        }

        private bool ParatyExists(Guid id)
        {
            return _context.Paratys.Any(e => e.id == id);
        }
    }
}
